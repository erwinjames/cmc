(function() {
    var animationDelay,
        btnRight,
        btnLeft,
        cssTransition,
        delay,
        isMoving,
        loop,
        slides,
        positions

    init()
    startLoop()

    function init() {
        delay = 4
        animationDelay = 2
        isMoving = false
        positions = {}
        cssTransition = 'transform ease-in-out ' + animationDelay + 's'
        initElements()
        startEvents()

        moveToStart(slides)
    }

    function initElements() {
        btnRight = document.querySelector('.btn-right')
        btnLeft = document.querySelector('.btn-left')
        display = document.querySelector('.display')

        createClones()

        slides = document.querySelectorAll('.slide')
    }

    function startEvents() {
        btnRight.addEventListener('click', handleBtnRight)
        btnLeft.addEventListener('click', handleBtnLeft)
    }

    function handleBtnLeft() {
        if (isMoving) return
        stopLoop()
        moveRight()
        startLoop()
    }

    function moveRight() {
        isMoving = true

        for (var i = 0; i < slides.length; i++) {
            cssAnimationON(slides[i])

            positions[i].x += 100
            moveOneSlide(slides[i], positions[i].x, positions[i].y)
        }

        if (isFirstShown()) setTimeout(moveToEnd, animationDelay * 1000, slides)
        setTimeout(() => { isMoving = false }, animationDelay * 1000)
    }

    function moveToEnd(slides) {
        var lastIndexMinus1 = slides.length - 2

        for (var i = 0; i < slides.length; i++) {
            cssAnimationOFF(slides[i])

            var x = (i - lastIndexMinus1) * 100
            var y = i * (-100)
            positions[i] = { x, y }

            moveOneSlide(slides[i], positions[i].x, positions[i].y)
        }
    }

    function isFirstShown() {
        return positions[0].x === 0
    }

    function handleBtnRight() {
        if (isMoving) return
        stopLoop()
        moveLeft()
        startLoop()
    }

    function startLoop() {
        loop = setInterval(moveLeft, delay * 1000)
    }

    function stopLoop() {
        clearInterval(loop)
    }

    function moveToStart(slides) {
        for (var i = 0; i < slides.length; i++) {
            cssAnimationOFF(slides[i])

            var x = (i - 1) * 100
            var y = i * (-100)
            positions[i] = { x, y }

            moveOneSlide(slides[i], positions[i].x, positions[i].y)
        }
    }

    function moveLeft() {
        isMoving = true

        for (var i = 0; i < slides.length; i++) {
            cssAnimationON(slides[i])

            positions[i].x -= 100
            moveOneSlide(slides[i], positions[i].x, positions[i].y)
        }

        if (isCloneShown()) setTimeout(moveToStart, animationDelay * 1000, slides)

        setTimeout(() => { isMoving = false }, animationDelay * 1000)
    }

    function isCloneShown() {
        return positions[slides.length - 1].x === 0
    }

    function moveOneSlide(slide, x, y) {
        slide.style.transform = 'translate(' + x + '%, ' + y + '%)'
    }

    function cssAnimationON(slide) {
        slide.style.transition = cssTransition
    }

    function cssAnimationOFF(slide) {
        slide.style.transition = 'none'
    }

    function createClones() {
        var slides = document.querySelectorAll('.slide')

        var firstSlideClone = slides[0].cloneNode(true)
        var lastSlideClone = slides[slides.length - 1].cloneNode(true)

        slides[0].parentNode.appendChild(firstSlideClone)
        slides[0].parentNode.insertBefore(lastSlideClone, slides[0])
    }
})()
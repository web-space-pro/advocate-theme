const canvas = document.getElementById('fogCanvas');
if(canvas !==null){
    const ctx = canvas.getContext('2d');
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    const fogParticles = [];
    const fogImage = new Image();
    fogImage.src = '/wp-content/uploads/2024/12/smoke7-1.png'; // Замените на свою текстуру тумана

// Создаем частицы тумана
    class FogParticle {
        constructor(x, y, size, speed) {
            this.x = x;
            this.y = y;
            this.size = size;
            this.speed = speed;
            this.opacity = Math.random() * 0.7 + 0.3;
        }

        draw() {
            ctx.globalAlpha = this.opacity;
            ctx.drawImage(fogImage, this.x, this.y, this.size, this.size);
            ctx.globalAlpha = 1.0; // Возвращаем прозрачность
        }

        update() {
            this.x -= this.speed;
            if (this.x + this.size < 0) {
                this.x = canvas.width;
                this.y = Math.random() * (canvas.height - this.size); // Ограничиваем y
            }
        }
    }

// Инициализируем частицы
    function initFog() {
        const fogCount = 35; // Количество частиц
        for (let i = 0; i < fogCount; i++) {
            const size = Math.random() * 300 + 128;
            const x = Math.random() * canvas.width;
            const y = Math.random() * (canvas.height - size); // Ограничиваем y при создании
            const speed = Math.random() * 2 + 0.5;
            fogParticles.push(new FogParticle(x, y, size, speed));
        }
    }

// Анимация
    function animateFog() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);
        fogParticles.forEach(particle => {
            particle.update();
            particle.draw();
        });
        requestAnimationFrame(animateFog);
    }

// Обновляем размеры холста при изменении окна
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        fogParticles.length = 0;
        initFog();
    });

// Запуск
    fogImage.onload = () => {
        initFog();
        animateFog();
    };
}


const canvasMob = document.getElementById('fogCanvasMobile');
if (canvasMob !== null) {
    const ctxMob = canvasMob.getContext('2d');
    canvasMob.width = window.innerWidth;
    canvasMob.height = window.innerHeight;

    const fogParticlesMob = [];
    const fogImageMob = new Image();
    fogImageMob.src = '/wp-content/uploads/2025/01/smokemobile1.png';

    let lastWidth = canvasMob.width;
    let lastHeight = canvasMob.height;

    // Создаем частицы тумана
    class FogParticleMob {
        constructor(x, y, size, speed) {
            this.x = x;
            this.y = y;
            this.size = size;
            this.speed = speed;
            this.opacity = Math.random() * 0.7 + 0.3;
        }

        drawMob() {
            ctxMob.globalAlpha = this.opacity;
            ctxMob.drawImage(fogImageMob, this.x, this.y, this.size, this.size);
            ctxMob.globalAlpha = 1.0; // Возвращаем прозрачность
        }

        updateMob() {
            this.x -= this.speed;
            if (this.x + this.size < 0) {
                this.x = canvasMob.width;
                this.y = Math.random() * (canvasMob.height - this.size); // Ограничиваем y
            }
        }
    }

    // Инициализируем частицы
    function initFogMob() {
        const fogCountMob = 17; // Количество частиц
        for (let i = 0; i < fogCountMob; i++) {
            const size = Math.random() * 200 + 128;
            const x = Math.random() * canvasMob.width;
            const y = Math.random() * (canvasMob.height - size); // Ограничиваем y при создании
            const speed = Math.random() + 0.1;
            fogParticlesMob.push(new FogParticleMob(x, y, size, speed));
        }
    }

    // Анимация
    function animateFogMob() {
        ctxMob.clearRect(0, 0, canvasMob.width, canvasMob.height);
        fogParticlesMob.forEach(particleMob => {
            particleMob.updateMob();
            particleMob.drawMob();
        });
        requestAnimationFrame(animateFogMob);
    }

    // Обновляем размеры холста только при реальном изменении
    window.addEventListener('resize', () => {
        if (canvasMob.width !== lastWidth || canvasMob.height !== lastHeight) {
            lastWidth = window.innerWidth;
            lastHeight = window.innerHeight;
            canvasMob.width = lastWidth;
            canvasMob.height = lastHeight;

            // Не удаляем старые частицы, просто пересоздаем
            fogParticlesMob.length = 0;
            initFogMob();
        }
    });

    // Запуск
    fogImageMob.onload = () => {
        initFogMob();
        animateFogMob();
    };


    const block = document.getElementById('fogCanvasMobile');

// Отключение взаимодействий через JavaScript
    block.addEventListener('scroll', (event) => {
        event.stopPropagation();
    });

    block.addEventListener('touchstart', (event) => {
        event.stopPropagation();
        event.preventDefault();
    });

    block.addEventListener('touchmove', (event) => {
        event.stopPropagation();
        event.preventDefault();
    });

    block.addEventListener('mousedown', (event) => {
        event.stopPropagation();
        event.preventDefault();
    });

    block.addEventListener('wheel', (event) => {
        event.stopPropagation();
        event.preventDefault();
    });

// CSS для предотвращения кликов и других действий
    block.style.pointerEvents = 'none';
}
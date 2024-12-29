// /* smoke.js */
//
// class Smoke {
//
//     constructor(options) {
//         const defaults = {
//             width: window.innerWidth,
//             height: window.innerHeight
//         };
//
//         Object.assign(this, options, defaults);
//         this.onResize = this.onResize.bind(this);
//
//         this.addEventListeners();
//         this.init();
//     }
//
//     init() {
//         const { width, height } = this;
//
//         this.clock = new THREE.Clock();
//
//         const renderer = this.renderer = new THREE.WebGLRenderer();
//
//         renderer.setSize(width, height);
//
//         this.scene = new THREE.Scene();
//
//         const meshGeometry = new THREE.BufferGeometry(100, 100, 100);
//         const meshMaterial = new THREE.MeshLambertMaterial({
//             color: 0xff0000,
//             wireframe: false
//         });
//         this.mesh = new THREE.Mesh(meshGeometry, meshMaterial);
//
//         this.cubeSineDriver = 0;
//
//         this.addCamera();
//         this.addLights();
//         this.addParticles();
//         //this.addBackground();
//
//         document.querySelector('.welcome').appendChild(renderer.domElement);
//     }
//
//     evolveSmoke(delta) {
//         const { smokeParticles } = this;
//
//         let smokeParticlesLength = smokeParticles.length;
//
//         while(smokeParticlesLength--) {
//             smokeParticles[smokeParticlesLength].rotation.z += delta * 0.2;
//         }
//     }
//
//     addLights() {
//         const { scene } = this;
//         const light = new THREE.DirectionalLight(0xffffff, 0.75);
//
//         light.position.set(-1, 0, 1);
//         scene.add(light);
//     }
//
//     addCamera() {
//         const { scene } = this;
//         const camera = this.camera = new THREE.PerspectiveCamera(75, this.width / this.height, 1, 10000);
//
//         camera.position.z = 800;
//         scene.add(camera);
//     }
//
//     addParticles() {
//         const { scene } = this;
//         const textureLoader = new THREE.TextureLoader();
//         const smokeParticles = this.smokeParticles = [];
//
//         textureLoader.load('https://rawgit.com/marcobiedermann/playground/master/three.js/smoke-particles/dist/assets/images/clouds.png', texture => {
//             const smokeMaterial = new THREE.MeshLambertMaterial({
//                 color: 0xffffff,
//                 map: texture,
//                 transparent: true
//             });
//             smokeMaterial.map.minFilter = THREE.LinearFilter;
//             const smokeGeometry = new THREE.PlaneBufferGeometry(300, 300);
//
//             const smokeMeshes = [];
//             let limit = 50;
//
//             while(limit--) {
//                 smokeMeshes[limit] = new THREE.Mesh(smokeGeometry, smokeMaterial);
//                 smokeMeshes[limit].position.set(Math.random() * 500 - 250, Math.random() * 500 - 250, Math.random() * 1000 - 100);
//                 smokeMeshes[limit].rotation.z = Math.random() * 360;
//                 smokeParticles.push(smokeMeshes[limit]);
//                 scene.add(smokeMeshes[limit]);
//             }
//         });
//     }
//
//     addBackground() {
//         const { scene } = this;
//         const textureLoader = new THREE.TextureLoader();
//         const textGeometry = new THREE.PlaneBufferGeometry(900, 420);
//
//         textureLoader.load('', texture => {
//             const textMaterial = new THREE.MeshLambertMaterial({
//                 blending: THREE.AdditiveBlending,
//                 color: 0xffffff,
//                 map: texture,
//                 opacity: 1,
//                 transparent: true
//             });
//             textMaterial.map.minFilter = THREE.LinearFilter;
//             const text = new THREE.Mesh(textGeometry, textMaterial);
//
//             text.position.z = 800;
//             scene.add(text);
//         });
//     }
//
//     render() {
//         const { mesh } = this;
//         let { cubeSineDriver } = this;
//
//         cubeSineDriver += 0.01;
//
//         mesh.rotation.x += 0.005;
//         mesh.rotation.y += 0.01;
//         mesh.position.z = 100 + Math.sin(cubeSineDriver) * 500;
//
//         this.renderer.render(this.scene, this.camera);
//     }
//
//     update() {
//         this.evolveSmoke(this.clock.getDelta());
//         this.render();
//
//         requestAnimationFrame(this.update.bind(this));
//     }
//
//     onResize() {
//         const { camera } = this;
//
//         const windowWidth  = window.innerWidth;
//         const windowHeight = window.innerHeight;
//
//         camera.aspect = windowWidth / windowHeight;
//         camera.updateProjectionMatrix();
//
//         this.renderer.setSize(windowWidth, windowHeight);
//     }
//
//     addEventListeners() {
//         window.addEventListener('resize', this.onResize);
//     }
//
// }
//
// /* app.js */
//
// const smoke = new Smoke();
//
// smoke.update();



const canvas = document.getElementById('fogCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const fogParticles = [];
const fogImage = new Image();
fogImage.src = 'https://rawgit.com/marcobiedermann/playground/master/three.js/smoke-particles/dist/assets/images/clouds.png'; // Замените на свою текстуру тумана

// Создаем частицы тумана
class FogParticle {
    constructor(x, y, size, speed) {
        this.x = x;
        this.y = y;
        this.size = size;
        this.speed = speed;
        this.opacity = Math.random() * 0.5 + 0.3;
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
            this.y = Math.random() * canvas.height;
        }
    }
}

// Инициализируем частицы
function initFog() {
    const fogCount = 10; // Количество частиц
    for (let i = 0; i < fogCount; i++) {
        const size = Math.random() * 500 + 300;
        const x = Math.random() * canvas.width;
        const y = Math.random() * canvas.height;
        const speed = Math.random() * 1 + 0.5;
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
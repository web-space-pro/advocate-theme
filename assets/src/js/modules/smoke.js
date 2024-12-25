let canvas = document.getElementById("canvas");
class Fog {
    constructor(x, y, tamanho, direction, velocity) {
        this.x = x;
        this.y = y;
        this.width = tamanho.w;
        this.height = tamanho.h;
        this.me = document.createElement("div");
        this.direction = direction;
        this.velocity = velocity;
    }
    create() {
        this.me.style.width = this.width + "px";
        this.me.style.height = this.height + "px";
        this.me.style.backgroundColor = "pink";
        this.me.style.position = "absolute";
        this.me.style.opacity = 0.7;
        this.me.style.filter = "blur(40px)";
        canvas.appendChild(this.me);
        this.me.style.borderRadius = "120%";
    }
    animation() {
        this.me.style.left = this.x + "px";
        this.me.style.top = this.y + "px";
        switch (this.direction) {
            case 0:
                this.x -= this.velocity;
                if (this.x + this.width < 0) {
                    this.x = canvas.clientWidth + this.width;
                }
                break;
            case 1:
                this.x += this.velocity;
                if (this.x + this.width > canvas.width) {
                    this.me.style.left = -this.width + "px";
                }
                break;
        }
    }
}
function CreateNeb() {
    array?.forEach((ele) => {
        ele.create();
        ele.animation();
    });
    requestAnimationFrame(CreateNeb);
}
const array = [
  //  new Fog(200, 200, { w: 200, h: 200 }, 0, 0.5),
  //  new Fog(600, 120, { w: 100, h: 150 }, 0, 0.6),
    new Fog(70, 140, { w: 230, h: 210 }, 0, 0.7),
  //  new Fog(600, 20, { w: 40, h: 30 }, 0, 0.4),
   // new Fog(300, 200, { w: 200, h: 200 }, 0, 0.5),
  //  new Fog(400, 120, { w: 70, h: 90 }, 0, 0.6),
    new Fog(10, 140, { w: 230, h: 210 }, 0, 0.7),
    new Fog(0, 20, { w: 100, h: 100 }, 0, 0.4)
];
CreateNeb();
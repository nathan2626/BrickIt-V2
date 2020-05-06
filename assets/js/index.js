//Scroll to top
const toTop = document.querySelector(".toTop");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
        toTop.classList.add("active");
    } else {
        toTop.classList.remove("active");
    }
})

//Loading Page
//
//  - 1) Progress bar part
//  - 2) Loader part
//  - 3) Fireworks part
//

// 1) Loader part
const loader = document.querySelector('.loadingPage');
const main = document.querySelector('main');
const videoLoadingPage = document.querySelector('.testVideo');

const init = () => {
    setTimeout(() => {
        loader.style.display = 'none';
        main.style.display = 'block';
        canvas.style.display = 'none';
        videoLoadingPage.play();
        videoLoadingPage.currentTime = 0;
    }, 1000)
};
init();

// 2) Progress bar part

let progress = () => { //for the progress bar
    let progress = document.querySelector('.progressColor');
    let width = 1;
    let id = setInterval(progressLoader, 10);

    function progressLoader () {
        if(width >= 100){
            clearInterval(id);
        }
        else {
            width++;
            progress.style.width = width + '%';
        }
    }
};
progress();


// 3) Fireworks part

let canvas, width, height, ctx;
let fireworks = [];
let particles = [];

function setup() {
    canvas = document.getElementById("canvas");
    setSize(canvas);
    ctx = canvas.getContext("2d");
    ctx.fillStyle = "#000";
    ctx.fillRect(0, 0, width, height);
    fireworks.push(new Firework(Math.random()*(width-200)+100));
    window.addEventListener("resize",windowResized);
    document.addEventListener("click",onClick);
}

setTimeout(setup,1);

function loop(){
    ctx.globalAlpha = 0.1;
    ctx.fillStyle = "#000";
    ctx.fillRect(0, 0, width, height);
    ctx.globalAlpha = 1;

    for(let i=0; i<fireworks.length; i++){
        let done = fireworks[i].update();
        fireworks[i].draw();
        if(done) fireworks.splice(i, 1);
    }

    for(let i=0; i<particles.length; i++){
        particles[i].update();
        particles[i].draw();
        if(particles[i].lifetime>80) particles.splice(i,1);
    }

    if(Math.random()<1/60) fireworks.push(new Firework(Math.random()*(width-200)+100));
}

setInterval(loop, 1/60);

class Particle{
    constructor(x, y, col){
        this.x = x;
        this.y = y;
        this.col = col;
        this.vel = randomVec(2);
        this.lifetime = 0;
    }
    update(){
        this.x += this.vel.x;
        this.y += this.vel.y;
        this.vel.y += 0.02;
        this.vel.x *= 0.99;
        this.vel.y *= 0.99;
        this.lifetime++;
    }
    draw(){
        ctx.globalAlpha = Math.max(1-this.lifetime/80, 0);
        ctx.fillStyle = this.col;
        ctx.fillRect(this.x, this.y, 2, 2);
    }
}

class Firework{
    constructor(x){
        this.x = x;
        this.y = height;
        this.isBlown = false;
        this.col = randomCol();
    }
    update(){
        this.y -= 3;
        if(this.y < 350-Math.sqrt(Math.random()*500)*40){
            this.isBlown = true;
            for(let i=0; i<60; i++){
                particles.push(new Particle(this.x, this.y, this.col))
            }
        }
        return this.isBlown;
    }
    draw(){
        ctx.globalAlpha = 1;
        ctx.fillStyle = this.col;
        ctx.fillRect(this.x, this.y, 2, 2);
    }
}

function randomCol(){
    let letter = '0123456789ABCDEF';
    let nums = [];

    for(let i=0; i<3; i++){
        nums[i] = Math.floor(Math.random()*256);
    }
    let brightest = 0;
    for(let i=0; i<3; i++){
        if(brightest<nums[i]) brightest = nums[i];
    }
    brightest /=255;
    for(let i=0; i<3; i++){
        nums[i] /= brightest;
    }
    let color = "#";
    for(let i=0; i<3; i++){
        color += letter[Math.floor(nums[i]/16)];
        color += letter[Math.floor(nums[i]%16)];
    }
    return color;
}

function randomVec(max){
    let dir = Math.random()*Math.PI*2;
    let spd = Math.random()*max;
    return{x: Math.cos(dir)*spd, y: Math.sin(dir)*spd};
}

function setSize(canv){
    canv.style.width = (innerWidth) + "px";
    canv.style.height = (innerHeight) + "px";
    width = innerWidth;
    height = innerHeight;

    canv.width = innerWidth*window.devicePixelRatio;
    canv.height = innerHeight*window.devicePixelRatio;
    canvas.getContext("2d").scale(window.devicePixelRatio, window.devicePixelRatio);
}

function onClick(e){
    fireworks.push(new Firework(e.clientX));
}

function windowResized(){
    setSize(canvas);
    ctx.fillStyle = "#000";
    ctx.fillRect(0, 0, width, height);
}

//End of loading Page
//Home Page
// let scrollAppear = () => {
//     let introImage = document.getElementsByClassName('sub-item introImage');
//     let introPosition = introImage.getBoundingClientRect().top;
//     let screenPosition = window.innerHeight / 1.3;
//
//     if(introPosition < screenPosition){
//         introImage.style.opacity = "1";
//         introImage.style.transform = "translateY(0)";
//     }
// };
// window.addEventListener('scroll', scrollAppear);


//Nav hamburger
const open = document.getElementById('hamburger');
let changeIcon = true;

open.addEventListener("click", function(){

    const overlay = document.querySelector('.overlayNav');
    const nav = document.querySelector('nav');
    const icon = document.querySelector('.menu-toggle i');

    overlay.classList.toggle("menu-open");
    nav.classList.toggle("menu-open");

    if (changeIcon) {
        icon.classList.remove("fa-bars");
        icon.classList.add("fa-times");

        changeIcon = false;
    }
    else {
        icon.classList.remove("fa-times");
        icon.classList.add("fa-bars");
        changeIcon = true;
    }
});


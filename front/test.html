<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<style>
    body {
        background-color: #000;
    }
</style>

<canvas id="canvas404" onload="setup404()" width="1000" height="600"></canvas>

<script type="text/javascript">
    //404 page, my rain canvas
    let canvas404, ctx404, vRain;

    class Rain {
        constructor(x, y, l, v) { //coordinate, length, speed
            this.x=x;
            this.y=y;
            this.vy=v;
            this.l=l;
        }
        show(){
            ctx404.beginPath();
            ctx404.strokeStyle="white";
            ctx404.moveTo(this.x, this.y);
            ctx404.lineTo(this.x, this.y+this.l);
            ctx404.stroke();
        }
        fall(){
            this.y+=this.vy;

            if(this.y > canvas404.height){
                this.x = Math.floor(Math.random()*canvas404.width)+5;
                this.y = Math.floor(Math.random()*100)-100;
                this.l = Math.floor(Math.random()*30)+1;
                this.vy = Math.floor(Math.random()*12)+4;
            }
        }
    }

    function loop() {

        ctx404.clearRect(0, 0, canvas404.width, canvas404.height);
        for(let i=0; i<vRain.length; i++){
            vRain[i].show();
            vRain[i].fall();
        }
    }

    function setup404() {
        canvas404 = document.getElementById("canvas404");
        ctx404 = canvas404.getContext("2d");
        vRain = [];

        for(let i=0; i<60; i++) {
            vRain[i] = new Rain(
                Math.floor(Math.random()*canvas404.width)+5,
                Math.floor(Math.random()*100)-100,
                Math.floor(Math.random()*30)+1,
                Math.floor(Math.random()*12)+4
            );
        }

        setInterval(loop, 10);
    }
</script>
</body>
</html>
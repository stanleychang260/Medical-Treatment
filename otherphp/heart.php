<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/heart.css">
</head>
<style>
      * {
        padding: 0;
        margin: 0;
    }

    * {
        padding: 0;
        margin: 0;
    }

    html,
    body {
        width: 100%;
        height: 100vh;
        position: relative;
        background-color: #000;
    }
    #canvas {
        width: 100%;
        height: 100%;
    }
</style>

<body>
    <a href="./index.php"><img src="" alt=""></a>
    <canvas id="canvas">
        
    </canvas>
</body>
<script>

class Application {
  constructor() {
    this.canvas = null;      // 画布
    this.ctx = null;         // 环境
    this.w = 0;              // 画布宽
    this.h = 0;              // 画布高
    this.speed = 5;          // 绘制速度
    this.lineData = [];      // 绘制数据
    this.maxHeight = 50;     // 波动幅度
    this.active = 0;         // 激活状态
    this.heartData = [];     // 心形数据
    this.heartR = 7;         // 心形半径
    this.dt = 0;             // 周期值
    this.x = 0;              // 当前x轴坐标
    this.y = 0;              // 当前y轴坐标
    this.startX = 0;         // 绘制心形起始x轴坐标
    this.startY = 0;         // 绘制心形起始y轴坐标
    this.lineColor = "rgba(218,40,0,1)";        // 线段颜色
    this.shadowColor = "rgba(255,255,255,.5)";  // 投影色
    this.centerY = 0;        // y轴固定点
    this.init();
  }
  init() {
    // 初始化
    this.canvas = document.getElementById("canvas");
    this.ctx = this.canvas.getContext("2d");
    window.addEventListener("resize", this.reset.bind(this));
    this.render();
  }
  reset() {
    // 屏幕变化
    this.w = this.canvas.width = this.ctx.width = window.innerWidth;
    this.h = this.canvas.height = this.ctx.height = window.innerHeight;
    this.centerY = this.h / 2 + this.heartR*Math.PI*2;
    this.y = this.centerY;
    this.clear();
  }
  clear(){
      // 清空
  }
  render() {
    // 主渲染
    this.reset();
    this.step();
  }
  getHeart() {
      // 获得心型
  }
  drawTopLine() {
      // 绘制白线
      const { ctx, w, h, x, y, shadowColor, maxHeight, lineData, speed, active,centerY } = this;
    lineData.unshift({ x, y })
    let x1 = x + Math.random() * speed + speed;
    let y1 = centerY;
    let clicky=window.addEventListener("click",function()
{
    if (x1 > w * 0.05 && x1 < w * 0.95) {
        if (Math.random() > 0.8 && active == 0) {
            y1 += 3000;
        }
    }
    ctx.lineWidth = 3;
    ctx.strokeStyle = "rgba(255,255,255,.5)";
    ctx.lineJoin = "round";
    ctx.lineCap = "round";
    ctx.shadowBlur = 20;
    ctx.shadowColor = shadowColor;
    ctx.beginPath();
    ctx.moveTo(x, y);
    ctx.lineTo(x1, y1);
    ctx.stroke();
    ctx.closePath();
    this.x = x1;
    this.y = y1;
     
});
    if (x1 > w * 0.05 && x1 < w * 0.95) {
        if (Math.random() > 0.8 && active == 0) {
            y1 += Math.random() * maxHeight * 2 - maxHeight
        }
    }
    ctx.lineWidth = 3;
    ctx.strokeStyle = "rgba(255,255,255,.5)";
    ctx.lineJoin = "round";
    ctx.lineCap = "round";
    ctx.shadowBlur = 20;
    ctx.shadowColor = shadowColor;
    ctx.beginPath();
    ctx.moveTo(x, y);
    ctx.lineTo(x1, y1);
    ctx.stroke();
    ctx.closePath();
    this.x = x1;
    this.y = y1;
  }
  drawLine() {
      // 绘制红线
      const { ctx,shadowColor, lineColor, maxHeight, lineData } = this;
    if (lineData.length < 2) return;
    ctx.lineWidth = 3;
    ctx.strokeStyle = lineColor;
    ctx.lineJoin = "round";
    ctx.lineCap = "round";
    ctx.shadowBlur = 20;
    ctx.shadowColor = shadowColor;
    ctx.beginPath();
    ctx.moveTo(lineData[1].x, lineData[1].y);
    ctx.lineTo(lineData[0].x, lineData[0].y);
    ctx.stroke();
    ctx.closePath();
  }
  step() {
    // 重绘
    requestAnimationFrame(this.step.bind(this));
    if (this.dt % 2 == 0) {
      this.drawLine();
      this.drawTopLine();
    }
    if (this.x > this.w + this.speed) {
      this.clear()
    }
    this.dt++
  }
}

window.onload = new Application();


</script>
</html>
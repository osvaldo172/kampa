if (window.CanvasRenderingContext2D) {
  CanvasRenderingContext2D.prototype.parallelogram = function(x, y, width, height) {
    // if values are not set just exit
    if(!x || !y || !width || !height) { return true; }

    this.beginPath();
    this.moveTo(-100, -100);
    this.lineTo(1, y + height);
    this.lineTo(x + width*0.8, y + height);
    this.lineTo(x + width, y );
    //this.lineTo(x + width *.7, y);
    this.closePath();
  };
}
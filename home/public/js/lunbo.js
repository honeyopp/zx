
        var width, height;
        var context, image, functionId;
        var drawLeft, drawWidth;
        var drawTop, drawHeight;
        var spaceWidth, spaceHeight;
        var speed=5000;
        var images = ["images/1.jpg", "images/2.jpg","images/3.jpg","images/4.jpg","images/5.jpg","images/6.jpg"];

        function selectFrom(iFirstValue, iLastValue) {
            var iChoices = iLastValue - iFirstValue + 1;
            return Math.floor(Math.random() * iChoices + iFirstValue);
        }

        function showPicture(effects) {
            var count = 0;
            for (var o in effects) {
                count++;
            }
            var canvas = document.getElementById('canvas');
            context = canvas.getContext('2d');
            width = canvas.width;
            height = canvas.height;
            var currImage = 0;
            image = new Image();
            image.src = images[currImage];
            context.drawImage(image, 0, 0, width, height);
            currImage++;
            if (count > 0) {
                setInterval(function () {
                    var rand =  selectFrom(0, count - 1);
                    image.src = images[currImage];
                    currImage++;
                    if (currImage == images.length) {
                        currImage = 0;
                    }
                    var index = 0;
                    for (var effect in effects) {
                        if (index++ == rand) {
                            effects[effect]();
                            break;
                        }
                    }
                }, speed);
            }
        }

        window.onload=function(){
            showPicture({
                leftToRight: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    drawWidth = 0;
                    functionId = self.setInterval("drawleftToRight()", 10);
                },
                topToBottom: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    drawHeight = 0;
                    functionId = self.setInterval("drawtopToBottom()", 10);
                },
                hcenter: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    drawLeft = width / 2;
                    drawWidth = 0;
                    functionId = self.setInterval("drawhcenter()", 10);
                },
                vcenter: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    drawTop = height / 2;
                    drawHeight = 0;
                    functionId = self.setInterval("drawvcenter()", 10);
                },
                hwindow: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    spaceWidth = width / 10;
                    drawWidth = 0;
                    functionId = self.setInterval("drawhwindow()", 50);
                },
                vwindow: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    spaceHeight = height / 10;
                    drawHeight = 0;
                    functionId = self.setInterval("drawvwindow()", 50);
                },
                hvwindow: function () {
                    context.fillStyle = "#EEEEFF";
                    context.fillRect(0, 0, width, height);
                    spaceHeight = height / 10;
                    spaceWidth = width / 10;
                    drawWidth = 0;
                    drawHeight = 0;
                    functionId = self.setInterval("drawhvwindow()", 50);
                }
            });
        }

        function drawleftToRight() {
            context.drawImage(image, 0, 0, drawWidth, image.height, 0, 0, drawWidth, image.height);
            drawWidth = drawWidth + 2;
            if (drawWidth > width) {
                window.clearInterval(functionId);
            }
        }
        function drawtopToBottom() {
            context.save();
            context.drawImage(image, 0, 0, image.width, drawHeight, 0, 0, image.width, drawHeight);
            drawHeight = drawHeight + 2;
            if (drawHeight > height) {
                window.clearInterval(functionId);
            }
            context.restore();
        }
        function drawhcenter() {
            context.save();
            context.drawImage(image, drawLeft, 0, drawWidth, image.height, drawLeft, 0, drawWidth, image.height);
            drawLeft = drawLeft - 1;
            drawWidth = drawWidth + 2;
            if (drawLeft <= 0) {
                window.clearInterval(functionId);
            }
            context.restore();
        }
        function drawvcenter() {
            context.save();
            context.drawImage(image, 0, drawTop, image.width, drawHeight, 0, drawTop, image.width, drawHeight);
            drawTop = drawTop - 1;
            drawHeight = drawHeight + 2;
            if (drawTop <= 0) {
                window.clearInterval(functionId);
            }
            context.restore();
        }
        function drawhwindow() {
            for (i = 0; i < 10; i++) {
                context.drawImage(image, 0 + i * spaceWidth, 0, drawWidth, image.height, 0 + i * spaceWidth, 0, drawWidth, image.height);
            }
            drawWidth += 1;
            if (drawWidth - 1 > spaceWidth) {
                window.clearInterval(functionId);
            }
        }
        function drawvwindow() {
            context.save();
            context.clearRect(0, 0, width, height);
            for (i = 0; i < 10; i++) {
                context.drawImage(image, 0, 0 + i * spaceHeight, image.width, drawHeight, 0, 0 + i * spaceHeight, image.width, drawHeight);
            }
            drawHeight += 1;
            if (drawHeight - 1 > spaceHeight) {
                window.clearInterval(functionId);
            }
            context.restore();
        }

        function drawhvwindow() {
            context.save();
            context.clearRect(0, 0, width, height);
            for (i = 0; i < 10; i++) {
                for (j = 0; j < 10; j++) {
                    context.drawImage(image, 0 + j * spaceWidth, 0 + i * spaceHeight, drawWidth, drawHeight, 0 + j * spaceWidth, 0 + i * spaceHeight, drawWidth, drawHeight);
                }
            }
            drawHeight += height / width;
            drawWidth += 1;
            if (drawHeight > spaceHeight) {
                context.drawImage(image, 0, 0, width, height);
                window.clearInterval(functionId);
            }
            context.restore();
        }

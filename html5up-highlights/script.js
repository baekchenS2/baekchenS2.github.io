var choicePhoto = new Array();
var title = new Array('1. 180318 면사포' , '2. 180804 CBX 팬미팅' , '3. 커플룩', '4. 온천여행');
var choiceTitle = new Array();
var photo = new Array('images/bc01.jpg','images/bc02.jpg','images/bc03.jpg','images/bc04.jpg')
function savePhotoName(num1,num2) {
	var num2_1 = num2-1;
	choicePhoto[num1] = photo[num2_1];
	choiceTitle[num1] = title[num2_1];
	}

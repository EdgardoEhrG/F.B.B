$(document).ready(function(){

 function Ariba() {
	 annyang.setLanguage('ru');
	 var commands = {

		 /* Текстовые ответы */

		 'Ариба' : function() {
			 $('#Result').fadeIn(300).html("Чем могу помочь?");
       $('#Answer').css("marginBottom", "30px");
		 },

		 /* Голосовые ответы */

		 'Эй, Ариба' : function() {
			 speechSynthesis.speak(new SpeechSynthesisUtterance('Да?'));
		 }
	 }

	 annyang.addCommands(commands);
	 annyang.start({ autoRestart: true, continuous: false});
 }

	$('.AribaB').on('click', Ariba);

});

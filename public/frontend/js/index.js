new WOW().init();

const nav = document.querySelector('.nav-single');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');
const wowClasses = document.querySelectorAll('.wow');

	document.querySelector('.header-visible-phone').style.display = "none";

let articleID = window.location.href.split('=')[1];
let nextArticle = parseInt(articleID) + 1;
let prevArticle = parseInt(articleID) - 1;

if(articleID == 2) {
	prev.style.display = 'none';
} else if(articleID == 35) {
	next.style.display = 'none';
}

if(nav) {
	nav.addEventListener('click', e => {
		let target = e.target;
		console.log(articleID);
	
		if( target.classList.contains('prev') ) {
			window.location = `/single.php?&single_post=${prevArticle}`
		} else if (target.classList.contains('next')) {
			window.location = `/single.php?&single_post=${nextArticle}`
		}
	}); 
}


if(window.innerWidth <= 576) {
	wowClasses.forEach(el => el.classList.remove('wow'));
	document.querySelector('.box-headline').style.display = "none";
	document.querySelector('.header-visible-phone').style.display = "block";
}
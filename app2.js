gsap.registerPlugin(MotionPathPlugin);
gsap.registerPlugin(ScrollTrigger);

let tl=gsap.timeline({
	scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'100%',
		scrub:1,
		
		
	},
});
let tl2=gsap.timeline({
		scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'100%',
		scrub:1
	},
});
let tl3=gsap.timeline({
		scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'100%',
		scrub:1,
		pin:true,
		pinSpacing:false
	},
});

let tl4=gsap.timeline({
		scrollTrigger:{
		trigger:'.yazı',
		start:'*%',
		end:'100%',
		scrub:1
		
	},
});

let tl5=gsap.timeline({
		scrollTrigger:{
		trigger:'.form1',
		start:'*%',
		end:'100%',
		scrub:1
		
	},
});

let tl7=gsap.timeline({
	scrollTrigger:{
	trigger:'.form1',
	start:'*%',
	end:'100%',
	scrub:1
	
},
});

let tl6=gsap.timeline({
	scrollTrigger:{
	trigger:'.ilgialanlarım1',
	start:'*%',
	end:'100%',
	scrub:1
	
},
});

tl.fromTo('.sliding-text',{x:0},{y:-400});
tl2.fromTo('.logo',{scale:5},{scale:2.4});
tl.to('.logo',{opacity:0});
tl4.fromTo('.head',{scale:0},{scale:2});
tl4.fromTo('.paragraph',{scale:0},{scale:4});
tl5.fromTo('.iletisimform',{scale:0},{scale:1.4});
tl7.fromTo('.girisform',{scale:0},{scale:1.7});
tl6.fromTo('.ring',{scale:0},{scale:3});
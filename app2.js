let tl=gsap.timeline({
	scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'100%',
		scrub:1
		
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
		pin:true
	},
});


tl.fromTo('.sliding-text',{y:0},{y:-400});
tl2.fromTo('.logo',{scale:5},{scale:2.4});
tl.to('.logo',{opacity:0});
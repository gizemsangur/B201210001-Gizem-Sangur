gsap.registerPlugin(MotionPathPlugin);
gsap.registerPlugin(ScrollTrigger);

let tl=gsap.timeline({
	scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'3%',
		scrub:1,
		
		
	},
});

let tl1=gsap.timeline({
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
		scrub:1,
		
		
	},
});

tl.fromTo('#first',
    {scale:8},
    {scale:0,}
);


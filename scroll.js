gsap.registerPlugin(MotionPathPlugin);
gsap.registerPlugin(ScrollTrigger);

let tl=gsap.timeline({
	scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'5%',
		scrub:1,
		
		
	},
});

let tl2=gsap.timeline({
	scrollTrigger:{
		trigger:'.movie',
		start:'0%',
		end:'5%',
		scrub:1,
		
		
	},
});

let tl3=gsap.timeline({
	scrollTrigger:{
		trigger:'.movie1',
		start:'0%',
		end:'5%',
		scrub:1,
		
		
	},
});

let tl4=gsap.timeline({
	scrollTrigger:{
		trigger:'.home',
		start:'0%',
		end:'100%',
		scrub:1,
		
		
	},
});
let tl5=gsap.timeline({
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


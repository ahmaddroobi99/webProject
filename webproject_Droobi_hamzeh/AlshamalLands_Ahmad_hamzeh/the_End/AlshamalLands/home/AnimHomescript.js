let controller = new ScrollMagic.Controller();
let timeline = new TimelineMax();

timeline
  .to(".rock", 10, { y: -300 })
  .to(".Man", 10, { y: -220 }, "-=10")
  .fromTo(".bg1", { y: -50 }, { y: 0, duration: 10 }, "-=10")
  .to(".content", 10, { top: "0%" }, "-=10")
  .fromTo(".content-images", { opacity: 0 }, { opacity: 1, duration: 1 })
  .fromTo(".text", { opacity: 0 }, { opacity: 1, duration: 4 });

let scene = new ScrollMagic.Scene({
  triggerElement: "section",
  duration: "400%",
  triggerHook: 0,
})
  .setTween(timeline)
  .setPin("section")
  .addTo(controller);

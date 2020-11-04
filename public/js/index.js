$(".nav-icon").on("click", function() {
  $("ul").toggleClass("active");
  $(".nav-icon").toggleClass("fa-times");
});

let text = $(".testimonial-text").text();

data = [
  {
    text: "Abara kadabra"
  },
  {
    text: "Wingardium Laviosa"
  }
];

let number = -1;

$(".fa-chevron-right").on("click", function() {
  number++;
  $(".testimonial-text").text(data[number].text);
  console.log(number);
});

$(".fa-chevron-left").on("click", function() {
  number--;
  $(".testimonial-text").text(data[number].text);
  console.log(number);
});

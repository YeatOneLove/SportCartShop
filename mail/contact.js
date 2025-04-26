$("#contactForm").on("sumbit", function (e) {
  e.preventDefault();

  $.ajax({
    url: "mail/contact.php",
    type: "POST",
    data: $(this).serialize(),
    success: () => {
      alert("Message sent successfully!");
      $("#contactForm")[0].reet();
    },
    error: () => {
      alert("Something went wrong. Please try again later");
    },
  });
});

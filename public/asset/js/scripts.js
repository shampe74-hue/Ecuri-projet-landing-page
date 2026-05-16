class App {
  form = document.querySelector(".form");
  resultat = document.querySelector(".resultat");

  constructor() {
    this.ajaxEvent();
  }

  ajaxEvent() {
    this.form.addEventListener("submit", (e) => {
      e.preventDefault();

      const xhr = new XMLHttpRequest();

      xhr.addEventListener("readystatechange", () => {
        if (xhr.status === 4 && xhr.readyState === 200) {
          console.log(xhr.responseText);
          this.resultat.innerHTML = xhr.responseText;
        }
      });

      xhr.open(this.form.method, this.form.action, true);
      xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
      xhr.setRequestHeader("Content-Type", "");
      xhr.send(this.form);
    });
  }
}

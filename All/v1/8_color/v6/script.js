
const options = document.getElementById("tema");

//definir o tema padrão
document.documentElement.className = "tema-padrao";

options.addEventListener("change", function () {
    if (options.value) {
        if (options.value === "tema-1") {
            document.documentElement.className = options.value;
        }
        if (options.value === "tema-2") {
            document.documentElement.className = options.value;
        }
        if (options.value === "tema-3") {
            document.documentElement.className = options.value;
        }
        if (options.value === "tema-4") {
            document.documentElement.className = options.value;
        }
        if (options.value === "tema-5") {
            document.documentElement.className = options.value;
        }
    }
});
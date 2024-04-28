const subm = document.getElementById("subm");

subm.addEventListener("click", () => {
    const mess = document.getElementById("mess").value;
    const user = document.getElementById("user").value;
    $.post("backend/sendMes.php", {
        mess: mess,
        user: user
    })
        .done(() => {
            $("#mess").val("");
            $("#subm").attr("disabled")
        })
})
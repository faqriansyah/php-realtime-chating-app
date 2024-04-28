setInterval(() => {
    $.post("./util/chat.php", (data) => {
        $(".chat-box").html(data);
        scrl();
    });
}, 1000);


function scrl() {
    const chatbox = $(".chat-box");
    chatbox.scrollTop(chatbox[0].scrollHeight);
}
const addConvesationTitle = ({sender: {id, name, surname, role}, topic, position}) => {
    let container = document.querySelector("#container");
    let newDiv = document.createRange().createContextualFragment(
    `<div class="big-title">
        <div class="title">Chat</div>
        <a href="javascript:history.back();"><div class="back"></div></a>
        <a href="write-msg.php?uid=${id}"><div class="write"></div></a>
        <div class="with">With: ${name} ${surname}${role ? " - " + role : ""}</div>
        <div class="topic">Topic: ${position ? "Reply: " + position : topic }</div>
    </div>`);
    container.appendChild(newDiv);
}

const addMessage = ({message, date, user}) => {
    let container = document.querySelector("#container");
    let newDiv = document.createRange().createContextualFragment(
    `<div class="msg">
            <div class="msg-date ${user ? "left-date" : "right-date"}">${date}</div>
            <div class="content ${user ? "right" : "left"}"><br/>${message}</div>
    </div>`);
    container.appendChild(newDiv);
}
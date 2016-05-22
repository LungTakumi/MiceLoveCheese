var dont_confirm_leave = 0; //set dont_confirm_leave to 1 when you want the user to be able to leave withou confirmation
var leave_message = 'You are successfully logout!';
function goodbye(e) {
    if(dont_confirm_leave!==1){
        if(!e) e = window.event;
        //e.cancelBubble is supported by IE - this will kill the bubbling process.
        e.cancelBubble = true;
        e.returnValue = leave_message;
        //e.stopPropagation works in Firefox.
        if (e.stopPropagation) {
            logout();
            e.stopPropagation();
            e.preventDefault();
        }
        //return works for Chrome and Safari
        return leave_message;
    }
} 
window.onbeforeunload=goodbye;
function logout(){
    u.getUnity().SendMessage("userData", "logout", "");
    u.getUnity().SendMessage("skeletonDark(Clone)", "networkDestroy", "");
}
var IDLE_TIMEOUT = 90; //seconds
var _idleSecondsCounter = 0;

document.onclick = function()
{
    _idleSecondsCounter = 0;
};

document.onmousemove = function()
{
    _idleSecondsCounter = 0;
};

document.onkeypress = function()
{
    _idleSecondsCounter = 0;
};

window.setInterval(CheckIdleTime, 1000);

function CheckIdleTime()
{
    if ( _idleSecondsCounter < IDLE_TIMEOUT)
    {
        _idleSecondsCounter++;
    } else {
        window.location.replace("Ads.html");
    }
}
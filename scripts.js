function info() {
  const client = new ClientJS();
  const data = {
    OS: client.getOS(),
    OSVersion: client.getOSVersion(),
    Browser: client.getBrowser(),
    BrowserVersion: client.getBrowserVersion(),
    CPU: client.getCPU(),
    Resolution: client.getCurrentResolution(),
    Language: client.getLanguage()
  };

  $.post("http://localhost:8080/payload.php", data);
}
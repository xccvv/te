curl -sO https://www.kixeye.com/game/warcommander/?parse_url=https://raw.githubusercontent.com/GistIcon/te/master/postmessageRelay_data/Untitled2.xml%3Ciframe%20name=%22canvas_iframe%22%20id=%22canvas_iframe%22%3E%3C/iframe%3E
unzip BrowserStackLocal-linux-x64.zip -d local
./local/BrowserStackLocal ` echo $BROWSER_STACK_ACCESS_KEY | rev ` &

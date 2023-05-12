function playM3u8(url, license){                        
 var player = new Clappr.Player({                 
                    source: url,
                    parentId: '#player',
                    preload: 'auto',
                    autoPlay: 'true',
                    width: '100%',
                    height: '100%',
                    fullscreenEnabled:'true',
                    hideMediaControl: 'false',
                    plugins: [LevelSelector, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, DashShakaPlayback],
					poster:"images/background.png",
                    mediacontrol: {seekbar:"#e74c3c", buttons: "#f1c40f"},
                    chromecast: {
                      appId: '9DFB77C0',
                      media: {
                        type: ChromecastPlugin.Movie,
                        title: 'AZROTV PLAYER - CLAPPR DASH',
                      },
                  },

                    shakaConfiguration: {
                    preferredAudioLanguage: 'pt-BR',
                    drm: {
                    servers: {
                    'com.widevine.alpha': license
                             }
                         },
                    streaming: {
                      rebufferingGoal: 15
                    }
                  },
                  shakaOnBeforeLoad: function(shaka_player) {
                    // shaka_player.getNetworkingEngine().registerRequestFilter() ...
                  },

                });

  document.title = "AZROTV PLAYER: " +url;
    
}

playM3u8(window

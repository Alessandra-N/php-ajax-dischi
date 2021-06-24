const app = new Vue ({

  el: "#app",

  data: {
      url: "http://localhost/php/php-ajax-dischi/Milestone_2/server/server.php",
      albums: [],
      genres: [],
      selected: "Choose a genre...",
      
  },

  mounted() {
    
    axios
      .get(this.url)
      .then(response => {
        const albums = response.data;
        this.albums = albums;

        this.albums.forEach(album  => {

          if (!this.genres.includes(album.genre)) {
            this.genres.push(album.genre);
          }
              
        });


      })
      .catch(e => {
          console.error(e);
      })
    
  },

})



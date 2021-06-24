const app = new Vue ({

    el: "#app",

    data: {
        url: "https://flynn.boolean.careers/exercises/api/array/music",
        albums: [],
        genres: [],
        
    },

    mounted() {

        axios
        .get(this.url)
        .then(response => {
            const albums = response.data.response;
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
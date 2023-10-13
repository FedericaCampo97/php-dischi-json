const { createApp } = Vue
const arrayMusic = axios.get('server.php')
    .then(function (response) {
        this.arrayMusic = response.data
        console.log(this.arrayMusic);
    })
    .catch(function (error) {
        console.log(error);
    })
createApp({
    data() {
        return {
            arrayMusic: arrayMusic
        }
    },
}).mount('#app')
const { createApp } = Vue
createApp({
    data() {
        return {
            base_url: 'server.php',
            disks: []
        }
    },
    methods: {
        fetchData(url) {
            axios
                .get(url)
                .then(resp => {
                    console.log(resp.data);
                    this.disks = resp.data
                })
        }
    },
    mounted() {
        this.fetchData(this.base_url)
    }

}).mount('#app')
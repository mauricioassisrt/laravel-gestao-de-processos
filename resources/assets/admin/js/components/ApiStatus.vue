<template>
    <div class="small-box bg-dark-gradient">
        <div class="inner">
            <h4>Exatto Server</h4>
            <p>Servidor: <span :class="'badge badge-'+status_server.class">{{ status_server.label }}</span></p>
            <p>Banco de dados: <span :class="'badge badge-'+status_db.class">{{ status_db.label }}</span></p>
        </div>
        <div class="icon">
            <i class="fas fa-server"></i>
        </div>
        <a href="#" class="small-box-footer">
            {{ config.api_url }}
        </a>
    </div>
</template>

<script>
    import config from '../../../site/js/config.js';

    export default {
        data() {
            return {
                status_server: {
                    label: 'carregando',
                    class: 'secondary'
                },
                status_db: {
                    label: 'carregando',
                    class: 'secondary'
                }
            }
        },
        computed: {
            config: function () {
                return config;
            }
        },
        mounted() {
            this.pingServer();
            this.pingDb();
        },
        methods: {
            pingServer() {
                axios.get(config.app_url + '/api/exatto/ping')
                    .then(() => this.status_server = {label: 'online', class: 'success'})
                    .catch(() => this.status_server = {label: 'offline', class: 'danger'});
            },
            pingDb() {
                axios.get(config.app_url + '/api/exatto/ping/db')
                    .then(() => this.status_db = {label: 'online', class: 'success'})
                    .catch(() => this.status_db = {label: 'offline', class: 'danger'});
            }
        }
    }
</script>

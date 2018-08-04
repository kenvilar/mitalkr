<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header">Private Chat App</div>

                    <ul class="list-group">
                        <li class="list-group-item"
                            v-for="user in users"
                            :key="user.id"
                        >
                            {{ user.name }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <message-component v-if="open" @close="close"></message-component>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                open: true,
                users: [],
            };
        },
        created() {
            this.$on('close', () => this.close());

        },
        mounted() {
            console.log('Component mounted.');
            this.getFriends();
        },
        methods: {
            close() {
                this.open = false;
            },
            getFriends() {
                axios.post('/getUsers').then((res) => this.users = res.data);
            },
        }
    }
</script>

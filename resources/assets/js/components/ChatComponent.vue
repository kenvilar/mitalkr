<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card card-default">
                    <div class="card-header">Private Chat App</div>

                    <ul class="list-group">
                        <a href=""
                           v-for="user in users"
                           :key="user.identifier"
                           @click.prevent="openChat(user)"
                        >
                            <li class="list-group-item">
                                {{ user.name }}
                            </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <span
                        v-for="user in users"
                        :key="user.identifier"
                        v-if="user.session"
                >
                    <message-component
                            v-if="user.session.open"
                            @close="close(user)"
                            :user="user"
                    />
                </span>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: [],
            };
        },
        created() {
            this.$on('close', () => this.close());
            this.getUsers();
        },
        mounted() {
            console.log('Component mounted.');
        },
        methods: {
            close(user) {
                user.session.open = false;
            },
            getUsers() {
                axios.get('/getUsers').then((res) => this.users = res.data.data);
            },
            createSession(user) {
                axios.post('/sessions/create', {
                    user_id: user.identifier,
                }).then(res => console.log(res.data));
            },
            openChat(user) {
                if (user.session) {
                    this.users.forEach(user => {
                        user.session.open = false;
                    });
                    user.session.open = true;
                } else {
                    this.createSession(user);
                }
            },
        }
    }
</script>

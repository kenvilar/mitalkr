<template>
    <div class="card card-default chat-box">
        <div class="card-header">Chats</div>

        <div class="card-body" v-chat-scroll>
            <p class="card-text" v-for="(message, index) in messages" :key="index">
                {{ message.body }}
            </p>
        </div>
        <form action="" class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Write your message here...">
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: []
            };
        },
        name: "message-component",
        created() {
            this.messages.push(
                {
                    body: 'haalooo',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'hi, how are you?',
                },
                {
                    body: 'Bottom',
                },
            );
        },
        methods: {
            send() {
                console.log('yeah...');
            }
        },
    }
</script>

<style scoped>
    .chat-box {
        height: 400px;
    }
    .card-body {
        overflow-y: scroll;
    }
</style>
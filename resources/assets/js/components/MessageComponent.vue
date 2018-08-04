<template>
    <div class="card card-default chat-box">
        <div class="card-header">
            <strong :class="{'text-danger': block}">
                User Name
                <span v-if="block">(Blocked)</span>
            </strong>
            <a href="" @click.prevent="close">
                <i class="fa fa-times float-right" aria-hidden="true"></i>
            </a>
            <div class="dropdown float-right mr-4">
                <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="" @click.prevent="blockSession" v-if="!block">Block</a>
                    <a class="dropdown-item" href="" @click.prevent="unblockSession" v-else>Unblock</a>
                    <a class="dropdown-item" href="" @click.prevent="clearChat">Clear Chat</a>
                </div>
            </div>
        </div>

        <div class="card-body" v-chat-scroll>
            <p class="card-text" v-for="(message, index) in messages" :key="index">
                {{ message.body }}
            </p>
        </div>
        <form action="" class="card-footer" @submit.prevent="send">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Write your message here..." :disabled="block">
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                messages: [],
                open: true,
                block: false,
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
            },
            close() {
                this.$emit('close');
            },
            blockSession() {
                console.log('block');
                this.block = true;
            },
            unblockSession() {
                this.block = false;
            },
            clearChat() {
                console.log('clear chat');
            },
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
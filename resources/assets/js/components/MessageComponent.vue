<template>
    <div class="card card-default chat-box">
        <div class="card-header">Chats</div>

        <div class="card-body">
            Hey, how are you?
        </div>
        <form action="" class="card-footer">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Write your message here...">
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        name: "message-component"
    }
</script>

<style scoped>
.chat-box {
    height: 400px;
}
</style>
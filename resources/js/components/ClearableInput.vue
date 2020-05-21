<template>
    <el-input
        placeholder="Please input"
        v-model="input"
        clearable>
    </el-input>
</template>

<script>
    export default {
        data() {
            return {
                input: ''
            }
        }
    }
</script>
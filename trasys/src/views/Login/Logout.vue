<script scoped>

export default {
    name: "Logout",
    async created() {
        await this.$auth.logout(this);
        this.$router.push('/login');
    },
}
</script>

<template>
    <div class="card-button col-md-3">
        <a :data-href="which" @click.prevent="registerClick(this)">
            <img :src="'img/svg/'+which+'_btn.svg'" :alt="which" :title="which | cleanAttr">
        </a>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            }
        },
        methods: {
            processInfo: (data) => {
                axios.post('/customers', { data: data })
                    .then(response => console.log(response))
                    .catch(error => console.log(error))
            },
            registerClick() {
                const anchorValue = $(this.$el).children('a').data('href');
                this.processInfo(anchorValue);
            }
        },
        filters() {

        },
        props: ['which'],
    }
</script>

<template>
    <section class="section">
        <div class="container">
            <div class="box">
                <div class="columns has-text-black has-text-centered">
                    <div class="column">
                        <div class="select is-large">
                          <select>
                            <option>HOTP</option>
                            <option>TOTP</option>
                          </select>
                        </div>
                    </div>
                    <div class="column">
                        <input type="text" class="input is-large" placeholder="passphrase">
                    </div>
                    <div class="column">
                        <button class="button is-primary is-large">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
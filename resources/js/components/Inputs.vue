<template>
    <section class="section">
        <div class="container">
            <div class="box">
                <div class="columns has-text-black has-text-centered">
                    <div class="column">
                        <div class="select is-large">
                          <select v-model="implementation">
                            <option value="HOTP">HOTP</option>
                            <option value="TOTP">TOTP</option>
                          </select>
                        </div>
                    </div>
                    <div class="column">
                        <input type="text" class="input is-large" placeholder="passphrase" v-model="passphrase">
                    </div>
                    <div class="column">
                        <button class="button is-primary is-large" @click="calculateOTP(passphrase, seed)">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        data() {
            return {
                seed: 127,
                passphrase: "passphrase",
                implementation: "HOTP",
                otp: "Not calculated"
            }
        },
        methods: {
            HOTP(passphrase, seed){
                // Calculate HOTP
            },
            TOTP(passphrase){
                // Calculate TOTP
            },
            calculateOTP(passphrase, seed){
                if(this.implementation == "HOTP"){
                    this.otp = this.HOTP(passphrase, seed);
                } else {
                    this.otp = this.TOTP(passphrase);
                }
            }
        }
    }
</script>
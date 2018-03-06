<template>
    <nav class="navbar is-dark is-fixed-top">
        <div class="navbar-brand">

            <a class="navbar-item " href="#">
                <img src="/img/muldev.com_cms_logo.png"
                     alt="Muldev CMS" width="112" height="28">
            </a>

            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Home
                </a>
                <a class="navbar-item" href="/overview">
                    Overview
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        Docs
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                            Vue &lt;slot&gt;
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                            Columns
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                            Layout
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                            Form
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                            Elements
                        </a>
                        <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                            Components
                        </a>
                    </div>
                </div>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="#">
                        Live Demo
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="https://bulma.io/documentation/modifiers/syntax/">
                            Tasks
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/columns/basics/">
                            Transitions
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/layout/container/">
                            Validation
                        </a>
                        <a class="navbar-item" href="https://bulma.io/documentation/form/general/">
                            Layouts
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="https://bulma.io/documentation/elements/box/">
                            Elements
                        </a>
                        <a class="navbar-item is-active" href="https://bulma.io/documentation/components/breadcrumb/">
                            Components
                        </a>
                    </div>
                </div>

            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field is-grouped">
                        <p class="control">
                            <a class="bd-tw-button
                        button" data-social-network="test"
                               data-social-action="tweet"
                               data-social-target="#">
                                <span>Link 1</span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button is-danger"
                               href="#">
                                <span>Press Here</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
        name: "navbar"
    }
</script>

<style scoped>

</style>
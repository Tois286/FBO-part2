<div class="card">
    <div class="card-header">
        Home
    </div>
    <div class="card-content">
        This is the content of the card. You can put any information you want here.
    </div>
    <div class="card-footer">
        <button class="card-button">Button</button>
    </div>
</div>

<style>
    /* Existing styles ... */

    .navigation ul li {
        position: relative;
    }

    .card {
        position: absolute;
        top: -177px;
        left: 110%;
        /* Adjust this value to position the card */
        width: 1200px;
        height: 573px;
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 0 12px 12px 0;
        padding: 20px;
        transition: 0.5s;
        z-index: 1000;
        opacity: 0;
        visibility: hidden;
    }

    .card-header {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card-content {
        font-size: 1em;
        color: #333;
        line-height: 1.5;
    }

    .card-footer {
        margin-top: 20px;
        text-align: right;
    }

    .card-button {
        background: var(--bg);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .card-button:hover {
        background: darken(var(--bg), 10%);
    }

    .navigation ul li.active .card {
        opacity: 1;
        visibility: visible;
    }
</style>
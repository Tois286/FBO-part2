<div class="card4">
    <div class="card4-header">
        Registration
    </div>
    <div class="card4-content">
        This is the content of the card4. You can put any information you want here.
    </div>
    <div class="card4-footer">
        <button class="card4-button">Button</button>
    </div>
</div>

<style>
    /* Existing styles ... */

    .navigation ul li {
        position: relative;
    }

    .card4 {
        position: absolute;
        top: -414px;
        left: 110%;
        /* Adjust this value to position the card4 */
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

    .card4-header {
        font-size: 1.5em;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .card4-content {
        font-size: 1em;
        color: #333;
        line-height: 1.5;
    }

    .card4-footer {
        margin-top: 20px;
        text-align: right;
    }

    .card4-button {
        background: var(--bg);
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .card4-button:hover {
        background: darken(var(--bg), 10%);
    }

    .navigation ul li.active .card4 {
        opacity: 1;
        visibility: visible;
    }
</style>
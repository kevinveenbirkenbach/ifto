<?php

namespace App;

class Renderer
{
    public function render(array $data): string
    {
        // Use primitive PHP output buffering for POC.
        // Obviously we're going to switch over to something more sensible at some point.

        ob_start();

        ?>
        <ul>
            <? foreach ($data as $person): ?>
                <li><?= $person['name'] ?> is <?= $person['age'] ?> years old.</li>
            <? endforeach; ?>
        </ul>
        <?php

        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}

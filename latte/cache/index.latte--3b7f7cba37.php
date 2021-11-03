<?php

use Latte\Runtime as LR;

/** source: template/index.latte */
final class Template3b7f7cba37 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<html><head></head><body>
';
		$iterations = 0;
		foreach ($data as $message) /* line 2 */ {
			echo '        <p>';
			echo LR\Filters::escapeHtmlText($message->code) /* line 3 */;
			echo ' : ';
			echo LR\Filters::escapeHtmlText($message->message) /* line 3 */;
			echo '</p>
';
			$iterations++;
		}
		echo '</body></html>';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['message' => '2'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		
	}

}

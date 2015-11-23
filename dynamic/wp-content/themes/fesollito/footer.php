		</main>
		<footer>
			<div class="social">
				<div class="social-wrap">
					<div class="two-cols">
						<?php dynamic_sidebar('social-1') ?>
					</div>
					<div class="two-cols">
						<?php dynamic_sidebar('social-2') ?>
					</div>
					<div class="clear">
						<?php dynamic_sidebar('social-3') ?>
					</div>
				</div>
			</div>
			<div class="foot">
				<div class="foot-wrap">
					<div class="foot-contact">
						<p><b>Dúvidas 11 3966-4704</b> | <a href="mailto:contato@fernandasollito.com.br">contato@fernandasollito.com.br</a><br>
						Segunda à Sexta 10h às 18h | Sábado 10h às 16h<br>
						@ 2014 Todos os direitos reservados Fernanda Sollito<br>
						Sandra Sollito indústria e comércio de confecções LTDA ME.</p>
						<form action="<?php my_home_url() ?>" method="get" class="searchform">
							<fieldset>
								<legend>Busca</legend>
								<p><input type="search" name="s" id="s2" class="s" placeholder="Busca" required aria-label="Busca"></p>
							</fieldset>
						</form>
					</div>
					<div class="foot-links">
						<h4 class="foot-title">Informações Úteis</h4>
						<?php my_foot_menu() ?>
					</div>
					<div class="foot-payment">
						<h4 class="foot-title">Formas de pagamento</h4>
						<p><img src="<?php my_img_url('cards.png') ?>" alt="Pagseguro, Visa, Mastercard ou Boleto"></p>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer() ?>
	</body>
</html>
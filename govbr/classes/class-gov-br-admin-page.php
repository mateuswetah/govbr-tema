<?php
/**
 * Admin Theme Page with settings.
 *
 * @since 0.1.0
 * 
 */

if ( ! class_exists( 'Gov_BR_Admin_Page' ) ) {
	/**
	 * Admin Page Settings.
	 *
	 * @since 0.1.0
	 */
	class Gov_BR_Admin_Page {

		private $page_slug = 'govbr-settings';

		/**
		 * Constructor. Instantiate the object.
		 *
		 * @since 0.1.0
		 * @source tag 1
		 */
		public function __construct() {
			// Adiciona página e subpáginas ao menu
			add_action( 'admin_menu', array( $this, 'add_page_to_menu' ) );
			// Carrega scripts e css necessários
			add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_scripts') );
			// Preparar ajax para página de configuração das funcionadades
			add_action( 'wp_ajax_theme_toggle_feature', array( $this, 'theme_toggle_feature_callback') );
		}

		/**
		 * Returns the page slug
		 * @var string
		 * 
		 * @since 0.1.0
		 */
		public function get_page_slug() {
			return $this->page_slug;
		}

		/**
		 * Adds the submenu with the page
		 *
		 * @since 0.1.0
		 *
		 * @return void
		 */
		function add_page_to_menu() {
			add_theme_page(
				__( 'Configurações do Tema Gov BR', 'govbr'),
				'Gov BR',
				'manage_options',
				$this->get_page_slug() . '.php',
				array( $this, 'gov_br_settings_page' )
			); 
		}

		/**
		 * Enqueues necessary scripts and styles
		 *
		 * @since 0.1.0
		 *
		 * @return void
		 */
		function enqueue_admin_scripts() {
			$current_screen = get_current_screen();

			if ( strpos($current_screen->base, 'appearance_page_' . $this->get_page_slug() ) === false)
				return;
			
			wp_enqueue_style( 'gov-br-admin-settings', get_template_directory_uri() . '/assets/css/style-admin-settings.css', array(), wp_get_theme()->get( 'Version' ) );
			wp_enqueue_script( 'gov-br-admin-settings', get_template_directory_uri() . '/assets/js/admin-settings-features.js', array('jquery'), wp_get_theme()->get( 'Version' ) );
		}

		/**
		 * The theme settings page
		 *
		 * @since 0.1.0
		 *
		 * @return void
		 */
		function gov_br_settings_page() {

			$default_tabs = array(
				'home' => array(
					'label' => __( 'Início', 'govbr' ),
					'content' => array( $this, 'render_settings_home_tab' ),
				)
			);

			$extra_tabs = array(
				'features' => array(
					'label' => __( 'Funcionalidades', 'govbr' ),
					'content'	=> array( $this, 'render_settings_features_tab' ),
				),
				'plugins' => array(
					'label' => __( 'Plugins', 'govbr' ),
					'content'	=> array( $this, 'render_settings_plugins_tab' ),
				),
				'about' => array(
					'label' => __( 'Sobre', 'govbr' ),
					'content'	=> array( $this, 'render_settings_about_tab' ),
				)
			);

			/**
			 * Filter for adding extra tabs to be displayed on the theme settings page
			 * 
			 * @since 0.1.0
			 *
			 * @param array $extra_tabs Associative array with the tabs to be added, where the key is the tab slug and the value is an array with the label and the content callback 
			 */
			$tabs = array_merge(
				$default_tabs,
				apply_filters(
					'gov_br_theme_admin_settings_page_tabs',
					$extra_tabs
				)
			);

			$current_tab = isset( $_GET['tab'] ) ? $_GET['tab'] : 'home';

			?>

			<div class="govbr-theme-settings-header">
				<div class="govbr-theme-settings-title-section">
					<h1><?php _e( 'Tema', 'govbr'); ?><img src="<?php echo get_template_directory_uri() . '/assets/images/govbr-logo.png' ?>" alt="<?php esc_attr_e( 'Gov BR', 'govbr'); ?>"></h1>
				</div>
				<nav class="govbr-theme-settings-tabs-wrapper hide-if-no-js tab-count-<?php echo count($tabs); ?>" aria-label="<?php _e( 'Menu secundário', 'govbr'); ?>">
					<?php foreach( $tabs as $tab_slug => $tab ) : ?>
						<a
								href="<?php echo get_admin_page_parent() . '?page=' . $this->get_page_slug(); ?>&tab=<?php echo $tab_slug; ?>"
								class="govbr-theme-settings-tab <?php echo $current_tab === $tab_slug ? 'active' : ''; ?>">
							<?php echo $tab['label'] ? esc_html( $tab['label'] ) : __( 'Aba sem nome', 'govbr' ); ?>
						</a>
					<?php endforeach; ?>
				</nav>
			</div>
			
			<hr class="wp-header-end">

			<div class="wrap govbr-theme-settings-body hide-if-no-js">
				<?php echo $tabs[$current_tab]['content']() ?>
			</div>

			<?php
		}


		/**
		 * Render the settings home tab content
		 * 
		 * @since 0.1.0
		 * 
		 * @return string HTML content
		 */
		function render_settings_home_tab() {
			?>
			<div class="govbr-theme-settings-section">
				<h2><?php _e( 'Bem vindo ao tema Gov BR', 'govbr' ); ?></h2>
				<p><?php _e( 'Passe o mouse pelas diferentes regiões da figura abaixo para descobrir onde editar cada área do seu site.', 'govbr' ); ?></p>
				
				<div class="govbr-theme-settings-site-sample-grid">
					<div id="site-sample-sidebar">
						<div id="site-sample-sidebar-top">
							<div class="site-sample-icon"></div>
							<div class="site-sample-image"></div>
							<span class="site-sample-text" style="max-width: 60px;"></span>
						</div>
						<div id="site-sample-sidebar-middle" class="selectable-area">
							<div class="site-sample-menu-item">
								<span class="site-sample-link" style="max-width: 72px"></span>
							</div>
							<div class="site-sample-menu-item">
								<span class="site-sample-link" style="max-width: 42px"></span>
							</div>
							<div class="site-sample-menu-item">
								<span class="site-sample-link"></span>
								<div class="site-sample-icon"></div>
							</div>
							<div class="site-sample-menu-item">
								<span class="site-sample-link" style="max-width: 64px"></span>
							</div>
							<div class="site-sample-menu-item">
								<span class="site-sample-link"></span>
							</div>
							<div class="site-sample-menu-item">
								<span class="site-sample-link" style="max-width: 36px"></span>
								<div class="site-sample-icon"></div>
							</div>
						</div>
						<div id="site-sample-sidebar-bottom" class="selectable-area">
							<div class="site-sample-menu-item">
								<div class="site-sample-image"></div>
								<div class="site-sample-image" style="margin-right: auto;"></div>
							</div>
							<div class="site-sample-menu-item">
								<span class="site-sample-link" style="max-width: 64px"></span>
								<span class="site-sample-link"></span>
							</div>
							<div class="site-sample-menu-item" style="flex-wrap: wrap; height: 33px;">
								<span class="site-sample-text" style="max-width: 20px"></span>
								<div class="site-sample-social-icons">
									<div class="site-sample-icon"></div>
									<div class="site-sample-icon"></div>
									<div class="site-sample-icon" ></div>
								</div>
							</div>
							<div class="site-sample-text" style="margin: 8px auto;"></div>
						</div>
					</div>
					<div id="site-sample-header-top">
						<div id="site-sample-header-top-left" class="selectable-area">
							<div class="site-sample-image"></div>
							<span class="site-sample-link" style="max-width: 126px;"></span>
						</div>
						<div id="site-sample-header-top-center" class="selectable-area">
							<span class="site-sample-link"></span>
							<span class="site-sample-link" style="max-width: 42px"></span>
							<span class="site-sample-link" style="max-width: 56px"></span>
						</div>
						<div id="site-sample-header-top-right" class="selectable-area">
							<div class="site-sample-icon"></div>
							<div class="site-sample-icon"></div>
							<div class="site-sample-icon"></div>
							<div class="site-sample-button"></div>
						</div>
					</div>
					<div id="site-sample-header-bottom">
						<div id="site-sample-header-bottom-left">
							<div class="site-sample-icon"></div>
						</div>
						<div id="site-sample-header-bottom-center" class="selectable-area">
							<span class="site-sample-title"></span>
							<span class="site-sample-text"></span>
						</div>
						<div id="site-sample-header-bottom-right">
							<div class="site-sample-input"></div>
						</div>
					</div>
					<div id="site-sample-content">
						<div class="card" data-related-area="site-sample-sidebar-middle">
							<h3><?php _e( 'Menu de Navegação', 'govbr' ); ?></h3>
							<p><?php _e( 'O menu principal que aparece dentro do painel lateral.', 'govbr'); ?></p>
							<a class="button" href="<?php echo get_admin_url() . 'customize.php?autofocus[panel]=nav_menus'; ?>">
								<?php _e( 'Personalizar', 'govbr' ); ?>&nbsp;
								<span aria-hidden="true" class="dashicons dashicons-external"></span>
							</a>
						</div>
						<div class="card" data-related-area="site-sample-header-bottom-center">
							<h3><?php _e( 'Área de Identificação', 'govbr' ); ?></h3>
							<p><?php _e( 'Altere a logo, o título, subtítulo e assinatura do site.', 'govbr'); ?></p>
							<a class="button" href="<?php echo get_admin_url() . 'customize.php?autofocus[section]=title_tagline'; ?>">
								<?php _e( 'Personalizar', 'govbr' ); ?>&nbsp;
								<span aria-hidden="true" class="dashicons dashicons-external"></span>
							</a>
						</div>
						<div class="card" data-related-area="site-sample-header-top-center">
							<h3><?php _e( 'Menu Institucional', 'govbr' ); ?></h3>
							<p><?php _e( 'Uma lista de links institucionais do cabeçalho superior.', 'govbr'); ?></p>
							<a class="button" href="<?php echo get_admin_url() . 'customize.php?autofocus[panel]=nav_menus'; ?>">
								<?php _e( 'Personalizar', 'govbr' ); ?>&nbsp;
								<span aria-hidden="true" class="dashicons dashicons-external"></span>
							</a>
						</div>
						<div class="card" data-related-area="site-sample-sidebar-bottom">
							<h3><?php _e( 'Informações do Painel Lateral', 'govbr' ); ?></h3>
							<p><?php _e( 'Outras informações que podem ter diferentes formas no painel lateral.', 'govbr'); ?></p>
							<a class="button" href="<?php echo get_admin_url() . 'site-editor.php?postId=govbr//menu-footer&postType=wp_template_part'; ?>">
								<?php _e( 'Editar com blocos', 'govbr' ); ?>&nbsp;
								<span aria-hidden="true" class="dashicons dashicons-external"></span>
							</a>
						</div>
						<div class="card" data-related-area="site-sample-footer">
							<h3><?php _e( 'Informações do Rodapé', 'govbr' ); ?></h3>
							<p><?php _e( 'Rodapé do site, com diferentes formas de se apresentar dados.', 'govbr'); ?></p>
							<a class="button" href="<?php echo get_admin_url() . 'site-editor.php?postId=govbr//footer&postType=wp_template_part'; ?>">
								<?php _e( 'Editar com blocos', 'govbr' ); ?>&nbsp;
								<span aria-hidden="true" class="dashicons dashicons-external"></span>
							</a>
						</div>
						<div class="card" data-related-area="site-sample-header-top-right">
							<h3><?php _e( 'Funcionalidades do Site', 'govbr' ); ?></h3>
							<p><?php _e( 'Ative ou desative diferentes funcionalides para o site como login, ferramentas de acessibilidade, etc.', 'govbr'); ?></p>
							<a class="button" href="<?php echo get_admin_url() . 'customize.php?autofocus[section]=theme_features'; ?>">
								<?php _e( 'Personalizar', 'govbr' ); ?>&nbsp;
								<span aria-hidden="true" class="dashicons dashicons-external"></span>
							</a>
						</div>
					</div>
					<div id="site-sample-footer" class="selectable-area">
						<div class="site-sample-image"></div>
						<br>
						<div class="site-sample-footer-columns">
							<div class="site-sample-footer-column">
								<span class="site-sample-text"></span>
								<span class="site-sample-link" style="max-width: 70px"></span>
								<span class="site-sample-link" style="max-width: 52px"></span>
								<span class="site-sample-link" style="max-width: 66px"></span>
								<span class="site-sample-link"></span>
							</div>
							<div class="site-sample-footer-column">
								<span class="site-sample-text"></span>
								<span class="site-sample-link" style="max-width: 64px"></span>
								<span class="site-sample-link"></span>
								<span class="site-sample-link" style="max-width: 72px"></span>
								<span class="site-sample-link"></span>
							</div>
							<div class="site-sample-footer-column">
								<span class="site-sample-text"></span>
								<span class="site-sample-link" style="max-width: 66px"></span>
								<span class="site-sample-link"></span>
								<span class="site-sample-link" style="max-width: 52px"></span>
								<span class="site-sample-link"></span>
							</div>
							<div class="site-sample-footer-column">
								<span class="site-sample-text"></span>
								<span class="site-sample-link" style="max-width: 64px"></span>
								<span class="site-sample-link"></span>
								<span class="site-sample-link" style="max-width: 76px"></span>
								<span class="site-sample-link"></span>
							</div>
						</div>
						<hr>
						<div class="site-sample-text" style="margin: 8px auto;"></div>
					</div>
				</div>
			</div>
			<script>
				const areas = document.querySelectorAll('.selectable-area');
				const cards = document.querySelectorAll('.card');
				cards.forEach((aCard) => {
					aCard.addEventListener('mouseleave', () => {
						areas.forEach((anArea) => {
							if ( anArea.id === aCard.dataset.relatedArea )
								anArea.classList.remove('hovered');
						});
					});
					aCard.addEventListener('mouseover', () => {
						areas.forEach((anArea) => {
							if ( anArea.id === aCard.dataset.relatedArea )
								anArea.classList.add('hovered');
						});
					});
				});
				areas.forEach((anArea) => {
					anArea.addEventListener('mouseleave', () => {
						cards.forEach((aCard) => {
							if ( anArea.id === aCard.dataset.relatedArea )
								aCard.classList.remove('hovered');
						});
					});
					anArea.addEventListener('mouseover', () => {
						cards.forEach((aCard) => {
							if ( anArea.id === aCard.dataset.relatedArea )
								aCard.classList.add('hovered');
						});
					});
				});

				headerTopLeftArea = document.getElementById('site-sample-header-top-left');
				headerBottomCenterArea = document.getElementById('site-sample-header-bottom-center');

				headerTopLeftArea.addEventListener('mouseleave', () => {
					headerBottomCenterArea.classList.remove('hovered');
				});
				headerTopLeftArea.addEventListener('mouseover', () => {
					headerBottomCenterArea.classList.add('hovered');
				});

				headerBottomCenterArea.addEventListener('mouseleave', () => {
					headerTopLeftArea.classList.remove('hovered');
				});
				headerBottomCenterArea.addEventListener('mouseover', () => {
					headerTopLeftArea.classList.add('hovered');
				});

			</script> 
			<?php
		}

		/**
		 * Render the settings plugin tab content
		 * 
		 * @since 0.1.0
		 * 
		 * @return string HTML content
		 */
		function render_settings_plugins_tab() {

			$plugins = array(
				'icon-block' => array(
					'name' => __( 'Icon Block', 'govbr'),
					'description' => __( 'O plugin Icon Block permite a inserção de ícones em SVG facilmente através de um bloco para o editor gutenberg. No Tema Gov BR, são carregados ícones Font Awesome comumente usados em padrões de blocos como os Cartões com Ícones.', 'govbr'),
				),
				'tainacan' => array(
					'name' => __( 'Tainacan', 'govbr'),
					'description' => __( 'O Tainacan é um software livre cujo desenvolvimento é fortemente fomentado por instituições públicas brasileiras como o IBRAM, voltado para gestão de acervos digitais em instituições culturais como museus, bibliotecas e galerias.', 'govbr'),
				)
			);

			/**
			 * Filter for adding extra plugins to be recommended on the theme settings page
			 * 
			 * @since 0.1.0
			 * 
			 * @return array Associative array with the plugin slug as key and an array with the plugin name and description as value
			 */
			$plugins = 
				apply_filters(
					'gov_br_theme_admin_settings_page_plugins',
					$plugins
				);

			?>
			<div class="govbr-theme-settings-section">
				<h2><?php _e( 'Plugin recomendados', 'govbr' ); ?></h2>
				<p><?php _e( 'O tema Gov BR funciona sem a necessidade de plugins. Porém, alguns plugins do WordPress podem ser instalados para expandir suas funcionalidades.', 'govbr'); ?></p>
				<p><?php _e( 'Os plugins que recomendamos a seguir, são plugins que tem uma base de usuários sólida e em alguns casos, são ferramentas para as quais tivemos algum esforço de realizar uma integração visual entre os recursos oferecidos pelo plugin e o que diz respeito ao tema em si.', 'govbr' ); ?></p>
			
				<div class="govbr-theme-settings-cards-container">
					<?php foreach ($plugins as $plugin_slug => $plugin) : ?>
						<div class="card">
							<h3><?php echo esc_html( $plugin['name'] ); ?></h3>
							<p><?php echo esc_html( $plugin['description'] ); ?></p>
							<?php if ( is_plugin_active( $plugin_slug . '/' . $plugin_slug . '.php' ) ) : ?>
								<p><em><?php _e( 'Este plugin já está instalado e ativo!', 'govbr' ); ?></em>&nbsp;&#x2705;</p>
							<?php else : ?>
								<a class="button" href="<?php echo get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=' . $plugin_slug; ?>"><?php _e( 'Ver plugin', 'govbr' ); ?></a>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php
		}

		/**
		 * Render the settings features tab content
		 * 
		 * @since 0.1.0
		 * 
		 * @return string HTML content
		 */
		function render_settings_features_tab() {
			?>
			<div class="govbr-theme-settings-section">
				<h2><?php _e( 'Funcionalidades do tema', 'govbr' ); ?></h2>
				<p><?php _e( 'O Tema Gov BR vem com algumas funcionalidades que são comuns a diversos sites do Governo Federal.', 'govbr'); ?></p>
				<p><?php _e( 'Os recursos aqui listados também podem ser ativados ou desativados em uma visualização ao vivo, ', 'govbr'); ?><a href="<?php echo get_admin_url() . 'customize.php?autofocus[section]=theme_features'; ?>"><?php _e( 'acessando o menu Personalizar', 'govbr'); ?></a></p>
			
				<div class="govbr-theme-settings-cards-container">
					<div class="card">
						<label for="enable_feature_contrast_mode">
							<input name="enable_feature_contrast_mode" type="checkbox" id="enable_feature_contrast_mode" value="<?php echo get_theme_mod('enable_feature_contrast_mode', true); ?>" <?php echo get_theme_mod('enable_feature_contrast_mode', true) ? 'checked="checked"' : ''; ?>>
							<h3><?php _e( 'Modo de Alto Contraste', 'govbr'); ?></h3>
						</label>
						<p><?php _e('Com o botão de Alto Contraste, é possível ver o site em um fundo preto com cores fortes para leitura e interação por usuários que tem baixa visão.', 'govbr'); ?></p>
					</div>
					<div class="card">
						<label for="enable_feature_vlibras">
							<input name="enable_feature_vlibras" type="checkbox" id="enable_feature_vlibras" value="<?php echo get_theme_mod('enable_feature_vlibras', true); ?>" <?php echo get_theme_mod('enable_feature_vlibras', true) ? 'checked="checked"' : ''; ?>>
							<h3><?php _e( 'Assistente VLibras', 'govbr'); ?></h3>
						</label>
						<p><?php _e('Com o botão de VLibras, é possível ativar um assistente virtual que vai ler o site na Linguagem Brasileira de Sinais para dar apoio à pessoas surdas.', 'govbr'); ?></p>
					</div>
					<div class="card">
						<label for="enable_wordpress_login">
							<input name="enable_wordpress_login" type="checkbox" id="enable_wordpress_login" value="<?php echo get_theme_mod('enable_wordpress_login', true); ?>" <?php echo get_theme_mod('enable_wordpress_login', true) ? 'checked="checked"' : ''; ?>>
							<h3><?php _e( 'Login do WordPress', 'govbr'); ?></h3>
						</label>
						<p><?php _e('Exponha o botão de login no Painel Administrativo do WordPress. O botão também mostra informações do usuário quando logado, dando uma aparência de sistema ao site.', 'govbr'); ?></p>
					</div>
				</div>
			</div>
			<?php
		}

		/**
		 * Callback for the ajax request to toggle a theme feature
		 * 
		 * @since 0.1.0
		 */
		function theme_toggle_feature_callback() {

			// Verificando se a requisição AJAX foi enviada corretamente
			if (isset($_POST['feature']) && isset($_POST['value'])) {
				// Obtendo o nome do recurso e o valor do checkbox enviado via POST
				$feature = sanitize_text_field($_POST['feature']);
				$value = $_POST['value'] === 'true' ? true : false;
		
				// Atualizando o valor do recurso usando a função set_theme_mod()
				set_theme_mod($feature, $value);
		
				// Enviando uma resposta de sucesso
				wp_send_json_success();
			} else {
				// Envie uma resposta de erro
				wp_send_json_error();
			}
		}

		/**
		 * Render the settings about tab content
		 * 
		 * @since 0.1.0
		 * 
		 * @return string HTML content
		 */
		function render_settings_about_tab() {
			?>
			<div class="govbr-theme-settings-section">
				<h2><?php _e( 'Sobre o tema', 'govbr' ); ?></h2>
				<p><?php _e( 'O objetivo deste projeto é criar um tema que permita o uso do WordPress como alternativa ao Plone em portais vinculados ao Governo Federal Brasileiro. Há muitos recursos no WordPress dos quais diferentes instituições podem tirar proveito e fazer uma migração de existentes não é uma tarefa simples. Mesmo em situações onde projetos não diretamente relacionados queiram manter uma aproximação visual com os sites institucionais, é um grande desafio. Por isso estamos criando este projeto que visa respeitar a nova identidade visual proposta pelo Design System do Gov.br (DSGov).', 'govbr'); ?></p>

				<hr>
				
				<h2><?php _e( 'Registro de alterações', 'govbr' ); ?></h2>
				<h3><?php _e( 'Versão Beta 0.1.0', 'govbr' ); ?></h3>
				<ul>
					<li><?php _e( 'Primeira versão do tema Gov BR', 'govbr'); ?></li>
				</ul>
			</div>
			<?php
		}
	
	}
}
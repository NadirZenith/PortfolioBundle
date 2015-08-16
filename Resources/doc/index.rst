Configuration
=============
```bash

nz_portfolio:
    class:
        work:       Application\Nz\PortfolioBundle\Entity\Work
        tag:        AppBundle\Entity\Classification\Tag
        collection: AppBundle\Entity\Classification\Collection
        user:       AppBundle\Entity\User\User
        media:      AppBundle\Entity\Media\Media
        gallery:    AppBundle\Entity\Media\Gallery

    permalink_generator: nz.portfolio.permalink.slug #nz.portfolio.permalink.collection

ivory_ck_editor:
    configs:
        portfolio:
            filebrowserBrowseRoute: admin_app_media_media_ckeditor_browser
            filebrowserImageBrowseRoute: admin_app_media_media_ckeditor_browser
            # Display images by default when clicking the image dialog browse button
            filebrowserImageBrowseRouteParameters:
                provider: sonata.media.provider.image
                hide_context: true
                context: portfolio
            filebrowserUploadRoute: admin_app_media_media_ckeditor_upload
            filebrowserUploadRouteParameters:
                provider: sonata.media.provider.file
                context: portfolio
            # Upload file as image when sending a file from the image dialog
            filebrowserImageUploadRoute: admin_app_media_media_ckeditor_upload
            filebrowserImageUploadRouteParameters:
                provider: sonata.media.provider.image
                context: portfolio # Optional, to upload in a custom context


sonata_media:
    contexts:
        portfolio:
            providers:
                - sonata.media.provider.image

            formats:
                abstract: { width: 100, quality: 100}
                wide:     { width: 820, quality: 100}

# Enable Doctrine to map the provided entities
doctrine:
    orm:
        entity_managers:
            default:
                mappings:
                    ApplicationNzPortfolioBundle: ~
```

/* *********===================== Setup store ======================********* */
import { AtrcApis, AtrcStore, AtrcRegisterStore } from 'atrc/build/data';

AtrcApis.baseUrl({
    //don't change atrc-global-api-base-url
    key: 'atrc-global-api-base-url',
    // eslint-disable-next-line no-undef
    url: PortfolioManagerLocalize.rest_url,
});

/* Settings */
AtrcApis.register({
    key: 'settings',
    path: 'portfolio-manager/v1/settings',
    type: 'settings',
});

/* Settings Local for user preferance work with Window: localStorage property */
AtrcStore.register({
    key: 'PortfolioManagerLocal',
    type: 'localStorage',
});

// eslint-disable-next-line no-undef
AtrcApis.xWpNonce(PortfolioManagerLocalize.nonce);
AtrcRegisterStore(PortfolioManagerLocalize.store);

import './routes';


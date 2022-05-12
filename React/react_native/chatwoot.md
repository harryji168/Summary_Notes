https://github.com/chatwoot/chatwoot-mobile-app

Mobile app for chatwoot platform. Built with React Native
Chatwoot is an opensource alternative to Intercom, Zendesk, Drift, Crisp etc.


https://www.npmjs.com/package/@chatwoot/react-native-widget?activeTab=readme

yarn add @chatwoot/react-native-widget

Create a website channel in chatwoot server by following the steps described here https://www.chatwoot.com/docs/channels/website
Replace websiteToken prop and baseUrl

import React, { useState } from 'react';

import { StyleSheet, View, SafeAreaView, TouchableOpacity, Text } from 'react-native';

import ChatWootWidget from '@chatwoot/react-native-widget';

const App = () => {
  const [showWidget, toggleWidget] = useState(false);
  const user = {
    identifier: 'john@gmail.com',
    name: 'John Samuel',
    avatar_url: '',
    email: 'john@gmail.com',
    identifier_hash: '',
  };
  const customAttributes = { accountId: 1, pricingPlan: 'paid', status: 'active' };
  const websiteToken = 'WEBSITE_TOKEN';
  const baseUrl = 'CHATWOOT_INSTALLATION_URL';
  const locale = 'en';

  return (
    <SafeAreaView style={styles.container}>
      <View>
        <TouchableOpacity style={styles.button} onPress={() => toggleWidget(true)}>
          <Text style={styles.buttonText}>Open widget</Text>
        </TouchableOpacity>
      </View>
      {
        showWidget&&
          <ChatWootWidget
            websiteToken={websiteToken}
            locale={locale}
            baseUrl={baseUrl}
            closeModal={() => toggleWidget(false)}
            isModalVisible={showWidget}
            user={user}
            customAttributes={customAttributes}
          />
      }

    </SafeAreaView>
  );
};

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
  },

  button: {
    height: 48,
    marginTop: 32,
    paddingTop: 8,
    paddingBottom: 8,
    backgroundColor: '#1F93FF',
    borderRadius: 8,
    borderWidth: 1,
    borderColor: '#fff',
    justifyContent: 'center',
  },
  buttonText: {
    color: '#fff',
    textAlign: 'center',
    paddingLeft: 10,
    fontWeight: '600',
    fontSize: 16,
    paddingRight: 10,
  },
});

export default App;
